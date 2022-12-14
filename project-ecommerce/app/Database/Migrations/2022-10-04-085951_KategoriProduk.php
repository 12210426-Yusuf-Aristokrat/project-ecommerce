<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kategori'  =>['type'=>'varchar', 'constraint'=>100, 'null'=>true],
            'parent_id' =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true],
            'aktif'     =>['type'=>'enum("Y","T")']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tb_kategori_produk');
    }
    
    public function down()
    {
        $this->forge->dropTable('tb_kategori_produk');
        //
    }
}
