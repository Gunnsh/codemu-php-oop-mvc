<?php
class GrandParentClass {

}

class ParentClass extends GrandParentClass {

}

class ChildClass extends ParentClass {

}

$obj = new ChildClass;

var_dump(get_declared_classes());