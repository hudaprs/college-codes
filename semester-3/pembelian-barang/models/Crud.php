<?php

abstract class Crud
{
    abstract public function index();
    abstract public function store(mixed $data);
    abstract public function show(int $id);
    abstract public function update(int $id, mixed $data);
    abstract public function destroy(int $id);
}