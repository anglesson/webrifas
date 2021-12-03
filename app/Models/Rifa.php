<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'descricao',
      'preco',
      'dataDoSorteio',
      'tipoDaRifa',
      'status'
    ];

    protected $dates = [
      'dataDoSorteio'
    ];

    public function bilhetes()
    {
      return $this->hasMany(Bilhete::class);
    }

    public function criarRifa(array $data): Rifa
    {
      return $this->create($data);
    }
  
    public function editarRifa(array $data)
    {
      $this->update($data);
    }
  
    public function excluirRifa()
    {
      if($this->bilhetes->count() > 0) 
      {
        $this->bilhetes()->truncate();
      }
      $this->destroy($this->id);
    }
  
    public function gerarBilhetes()
    {
      define("TAMANHO_DEZENA", 2);
      define("TAMANHO_CENTENA", 3);
      define("TAMANHO_MILHAR", 4);
  
      $numeroDeBilhetes = 0;
      $tamanho = 0;
  
      switch ($this->tipoDaRifa) {
        case 'DEZENA':
          $numeroDeBilhetes = 100;
          $tamanho = TAMANHO_DEZENA;
          break;
        case 'CENTENA':
          $numeroDeBilhetes = 1000;
          $tamanho = TAMANHO_CENTENA;
          break;
        case 'MILHAR':
          $numeroDeBilhetes = 10000;
          $tamanho = TAMANHO_MILHAR;
          break;
      }

      for ($i = 0; $i < $numeroDeBilhetes; $i++) {
        $bilhete = new Bilhete();
        $bilhete->numero = str_pad($i, $tamanho, '0', STR_PAD_LEFT);
        $bilhete->status = 0;
        $bilhete->rifa_id = $this->id;
        $bilhete->save();
      }
    }
}
