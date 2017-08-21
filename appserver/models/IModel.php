<?php 
interface IModel{
    public function create($obj);

    public function read($obj = null);

    public function update($obj);

    public function delete($obj);
}
?>