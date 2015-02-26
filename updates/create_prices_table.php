<?php namespace Cptmeatball\Pricetables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePricesTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_pricetables_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('fk_category')->unsigned();
            $table->string('description', 255);
            $table->string('price', 10);
            $table->timestamps();
        });

        Schema::table('cptmeatball_pricetables_prices', function($table)
        {
            $table->foreign('fk_category')
            ->references('id')->on('cptmeatball_pricetables_categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cptmeatball_pricetables_prices');
    }

}
