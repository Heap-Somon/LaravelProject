<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
  //Why use $fillable?
  //The $fillable property is used to specify which attributes are mass-assignable. This means that we can assign an array of values to these attributes in a single go.
  // Is it necessary to use $fillable?
  // No, it is not necessary to use $fillable. If you do not specify the $fillable property, all attributes will be mass-assignable by default.
  // What is mass assignable?
  // Mass assignment is a feature in Laravel that allows you to assign an array of values to a model's attributes in a single go. This is useful when you are creating or updating multiple records at once.
  // If we don't use $fillable, what will happen?
  // If you do not specify the $fillable property, all attributes will be mass-assignable by default. This can be a security risk, as it allows users to update any attribute of the model using mass assignment.
  protected $fillable = [
    'name'
  ];
}