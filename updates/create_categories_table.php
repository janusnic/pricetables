<?php namespace Cptmeatball\Pricetables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_pricetables_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('fk_id')->unsigned();
            $table->string('title', 255);
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::table('cptmeatball_pricetables_categories', function($table)
        {
            $table->foreign('fk_id')
            ->references('id')->on('cptmeatball_pricetables_price_tables')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('cptmeatball_pricetables_categories');
    }

}
