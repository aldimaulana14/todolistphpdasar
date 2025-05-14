<?php

namespace Repository {

    use Entity\Todolist;
    
    interface TodolistRepository {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodolistRepositoryImpl implements TodolistRepository {

        private array $todolist = array();
        private bool $cek;

        function save(Todolist $todolist): void
        {

        }

        function remove(int $number): bool
        {
            return $this->cek;
        }

        function findAll(): array 
        {
            return $this->todolist;
        }

    }
}