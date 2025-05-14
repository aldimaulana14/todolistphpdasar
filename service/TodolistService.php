<?php

namespace Service {

    use Repository\TodolistRepository;

    interface TodolistService
    {

        function showtodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showtodolist(): void
        {

            echo "TODOLIST\n";

            foreach ($this->todolistRepository->findAll() as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void {}

        function removeTodolist(int $number): void {}
    }
}
