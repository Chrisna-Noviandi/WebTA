<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengajuan');
            $table->string('id_acesor');
            $table->text('nilai')->nullable();
            $table->text('f1')->nullable();
            $table->text('n1')->nullable();
            $table->text('f2')->nullable();
            $table->text('n2')->nullable();
            $table->text('f3')->nullable();
            $table->text('n3')->nullable();
            $table->text('f4')->nullable();
            $table->text('n4')->nullable();
            $table->text('f5')->nullable();
            $table->text('n5')->nullable();
            $table->text('f6')->nullable();
            $table->text('n6')->nullable();
            $table->text('f7')->nullable();
            $table->text('n7')->nullable();
            $table->text('f8')->nullable();
            $table->text('n8')->nullable();
            $table->text('f9')->nullable();
            $table->text('n9')->nullable();
            $table->text('f10')->nullable();
            $table->text('n10')->nullable();
            $table->text('f11')->nullable();
            $table->text('n11')->nullable();
            $table->text('f12')->nullable();
            $table->text('n12')->nullable();
            $table->text('f13')->nullable();
            $table->text('n13')->nullable();
            $table->text('f14')->nullable();
            $table->text('n14')->nullable();
            $table->text('f15')->nullable();
            $table->text('n15')->nullable();
            $table->text('f16')->nullable();
            $table->text('n16')->nullable();
            $table->text('f17')->nullable();
            $table->text('n17')->nullable();
            $table->text('f18')->nullable();
            $table->text('n18')->nullable();
            $table->text('f19')->nullable();
            $table->text('n19')->nullable();
            $table->text('f20')->nullable();
            $table->text('n20')->nullable();
            $table->text('f21')->nullable();
            $table->text('n21')->nullable();
            $table->text('f22')->nullable();
            $table->text('n22')->nullable();
            $table->text('f23')->nullable();
            $table->text('n23')->nullable();
            $table->text('f24')->nullable();
            $table->text('n24')->nullable();
            $table->text('f25')->nullable();
            $table->text('n25')->nullable();
            $table->text('f26')->nullable();
            $table->text('n26')->nullable();
            $table->text('f27')->nullable();
            $table->text('n27')->nullable();
            $table->text('f28')->nullable();
            $table->text('n28')->nullable();
            $table->text('f29')->nullable();
            $table->text('n29')->nullable();
            $table->text('f30')->nullable();
            $table->text('n30')->nullable();
            $table->text('f31')->nullable();
            $table->text('n31')->nullable();
            $table->text('f32')->nullable();
            $table->text('n32')->nullable();
            $table->text('f33')->nullable();
            $table->text('n33')->nullable();
            $table->text('f34')->nullable();
            $table->text('n34')->nullable();
            $table->text('f35')->nullable();
            $table->text('n35')->nullable();
            $table->text('f36')->nullable();
            $table->text('n36')->nullable();
            $table->text('f37')->nullable();
            $table->text('n37')->nullable();
            $table->text('f38')->nullable();
            $table->text('n38')->nullable();
            $table->text('f39')->nullable();
            $table->text('n39')->nullable();
            $table->text('f40')->nullable();
            $table->text('n40')->nullable();
            $table->text('f41')->nullable();
            $table->text('n41')->nullable();
            $table->text('f42')->nullable();
            $table->text('n42')->nullable();
            $table->text('f43')->nullable();
            $table->text('n43')->nullable();
            $table->text('f44')->nullable();
            $table->text('n44')->nullable();
            $table->text('f45')->nullable();
            $table->text('n45')->nullable();
            $table->text('f46')->nullable();
            $table->text('n46')->nullable();
            $table->text('f47')->nullable();
            $table->text('n47')->nullable();
            $table->text('f48')->nullable();
            $table->text('n48')->nullable();
            $table->text('f49')->nullable();
            $table->text('n49')->nullable();
            $table->text('f50')->nullable();
            $table->text('n50')->nullable();
            $table->text('f51')->nullable();
            $table->text('n51')->nullable();
            $table->text('f52')->nullable();
            $table->text('n52')->nullable();
            $table->text('f53')->nullable();
            $table->text('n53')->nullable();
            $table->text('f54')->nullable();
            $table->text('n54')->nullable();
            $table->text('f55')->nullable();
            $table->text('n55')->nullable();
            $table->text('f56')->nullable();
            $table->text('n56')->nullable();
            $table->text('f57')->nullable();
            $table->text('n57')->nullable();
            $table->text('f58')->nullable();
            $table->text('n58')->nullable();
            $table->text('f59')->nullable();
            $table->text('n59')->nullable();
            $table->text('f60')->nullable();
            $table->text('n60')->nullable();
            $table->text('f61')->nullable();
            $table->text('n61')->nullable();
            $table->text('f62')->nullable();
            $table->text('n62')->nullable();
            $table->text('f63')->nullable();
            $table->text('n63')->nullable();
            $table->text('f64')->nullable();
            $table->text('n64')->nullable();
            $table->text('f65')->nullable();
            $table->text('n65')->nullable();
            $table->text('f66')->nullable();
            $table->text('n66')->nullable();
            $table->text('f67')->nullable();
            $table->text('n67')->nullable();
            $table->text('f68')->nullable();
            $table->text('n68')->nullable();
            $table->text('f69')->nullable();
            $table->text('n69')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaians');
    }
};
