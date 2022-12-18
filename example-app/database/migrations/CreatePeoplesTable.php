<?php

declare(string_types=1);

use ;

class CreatePeoplesTable extends Migration
{
public function up(): void
{
Schema::create('peoples', function (Blueprint $table){
$table->increments('id')
$table->string('first_name')
$table->string('last_name')
$table->numbers('phone_number')
$table->string('street')
$table->numbers('number_street')
$table->string('city')
$table->string('country')
});
}
}
