<?php

namespace App\Models;

class ResourceModel
{
    var  $primaryKey = 'id';
    var $connection = false;
    var $table = '';
    private $details = [];

    public function load($value)
    {
        $table = $this->table;
        $collections = $this->connection->selectCollection('Phalcon', $this->table);
        $cursor = $collections->find(
            [],
            [
                'limit' => $value,
            ]
        );

        return $cursor->toArray();
    }

    public function __call($name, $args)
    {
        if (substr($name, 0, 3) == 'set') {
            $this->__set(substr($name, 3), $args[0]);
        }

        if (substr($name, 0, 3) == 'get') {
            return $this->__get(substr($name, 3));
        }

        return [substr($name, 0, 3), $args[0], $this->details];
    }

    public function __set($name, $value)
    {

        if ($name == $this->primaryKey) {
            $this->details['_id'] = $value;
        }
        $this->details[$name] = $value;
    }
    public function __get($name)
    {
        if (array_key_exists($name, $this->details)) {
            return $this->details[$name];
        }
    }
    public function save()
    {
        try {
            $collections = $this->connection->selectCollection('Phalcon', $this->table);
            $collections = $collections->insertOne(
                $this->details
            );

            return $collections;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function update()
    {
        // return $this->details;
        try {
            $collections = $this->connection->selectCollection('Phalcon', $this->table);
            // unset($this->details['_id']);
            $collections = $collections->updateOne(
                [$this->primaryKey => $this->details[$this->primaryKey]],
                ['$set' => $this->details],

            );
            return ['Modified' => $collections->getModifiedCount()];
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function delete($key = "")
    {
        $collections = $this->connection->selectCollection('Phalcon', $this->table);
        $collections = $collections->deleteOne(
            [$this->primaryKey => ($key == "") ? $this->details[$this->primaryKey] : $key]
        );
        return [
            'delete' => $collections->getDeletedCount()
        ];
    }
}
