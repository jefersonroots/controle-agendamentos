<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

     /**
      * Verifica se o modelo possui registros relacionados.
      */
     public function hasRelatedRecords(): bool
     {
         foreach ($this->getAllRelations() as $relationMethod) {
             if (method_exists($this, $relationMethod)) {
                 $relation = $this->{$relationMethod}();
                 if ($relation->exists()) {
                     return true;
                 }
             }
         }
 
         return false;
     }
 
     /**
      * Retorna todos os métodos de relação do modelo.
      */
     public function getAllRelations(): array
     {
         $relations = [];
         $reflection = new \ReflectionClass($this);
         $methods = collect($reflection->getMethods(\ReflectionMethod::IS_PUBLIC));
 
         $methods->each(function ($method) use (&$relations) {
             $returnType = $method->getReturnType();
             if ($returnType && is_subclass_of($returnType->getName(), \Illuminate\Database\Eloquent\Relations\Relation::class)) {
                 $relations[] = $method->getName();
             }
         });
 
         return $relations;
     }
}
