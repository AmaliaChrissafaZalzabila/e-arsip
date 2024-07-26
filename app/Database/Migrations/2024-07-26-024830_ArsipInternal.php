<?php
 
namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class ArsipInternal extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel ArsipInternal
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'dokumen'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'nomor'      => [
                'type'           => 'varchar',
                'constraint'     => 20,
            ],
            'jenis'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'divisi'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
            'tanggal'      => [
                'type'           => 'date',
            ],
            'user'      => [
                'type'           => 'varchar',
                'constraint'     => 255,
            ],
        ]);
 
        // Membuat primary key
        $this->forge->addKey('id', TRUE);
 
        // Membuat tabel Arsip Internal
        $this->forge->createTable('ArsipInternal', TRUE);
    }
 
    //-------------------------------------------------------
 
    public function down()
    {
        // menghapus tabel Arsip Internal
        $this->forge->dropTable('ArsipInternal');
    }
}