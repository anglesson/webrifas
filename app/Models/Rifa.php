<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rifa extends Model
{
    use HasFactory;

    /**
     * Indica quais campos são permitidos para inserção no banco de dados.
     */
    protected $fillable = [
      'nome',
      'descricao',
      'preco',
      'dataDoSorteio',
      'tipoDaRifa',
      'status'
    ];

    /**
     * Indica quais campos são do tipo Date para facilitar a manipulação e formatação de data no frontend.
     */
    protected $dates = [
      'dataDoSorteio'
    ];

    /**
     * Método responsável por buscar todos os bilhetes pertencentes à rifa no banco de dados.
     * @return Array<Bilhete>
     */
    public function bilhetes()
    {
      return $this->hasMany(Bilhete::class);
    }

    /**
     * Método responsável por salvar a rifa no banco de dados.
     * @param array $data
     * @return void
     */
    public function criarRifa(array $data): Rifa
    {
      return $this->create($data);
    }
  
    /**
     * Método responsável por editar as informações da rifa.
     * @param array $data
     * @return void
     */
    public function editarRifa(array $data)
    {
      $this->update($data);
    }

    /**
     * Método responsável por excluir a rifas e os bilhetes pertencentes a ela.
     * @return void
     */
    public function excluirRifa()
    {
      if($this->bilhetes->count() > 0) 
      {
        $this->bilhetes()->truncate();
      }
      $this->destroy($this->id);
    }
  
    /**
     * Método responsável por gerar os bilhetes de acordo com o tipo da Rifa.
     * @return void
     */
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
