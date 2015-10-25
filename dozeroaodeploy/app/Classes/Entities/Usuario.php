<?php namespace App\Classes\Entities;

class Usuario
{
    private $id = null;
    private $nome = null;
    private $email = null;
    private $senha = null;
    private $admin = null;
    private $ativo = null;
    private $created_at = null;
    private $updated_at = null;
 
    public function getId() {
        return $this->id;
    }
 
    public function getNome() {
        return $this->nome;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function getSenha() {
        return $this->senha;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
 
    public function setNome($nome) {
        $this->nome = $nome;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    /**
     * @param null $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return null
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @return null
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param null $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param null $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param null $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function register()
    {
        return [$this->nome, $this->email, $this->senha];
    }
}