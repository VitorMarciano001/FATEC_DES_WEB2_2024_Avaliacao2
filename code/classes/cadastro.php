<?php 
class Cadastro {
    protected $con;

    public function __construct(){
        
        $this->conectar_banco("vagas", "127.0.0.1", "root", "Marciano@001");
    }

    public function conectar_banco($dbname, $host,$user,$senha){
        $dsn = 'mysql:host='.$host.';dbname='.$dbname;
        try {
            $this->con = new PDO($dsn, $user, $senha);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro com o banco de dados:".$e->getMessage();
            exit();
        }
    }

    public function listar_vagas(){
        $stmt = $this->con->query("Select * from vagas");
        $vagas = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $vagas[] = $row;
        }

        return [
            'vagas' => $vagas
        ];

        
    }

    public function cadastrar_vaga($nome_empresa, $whats, $email, $description, $curso){
        $query = "INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) VALUES(:nome_empresa, :whats, :email, :description, :curso);";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":nome_empresa", $nome_empresa);
        $stmt->bindParam(":whats", $whats);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":curso", $curso);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }

    public function remove_vaga($id_vaga){
        $query = "DELETE FROM vagas WHERE id = :id";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(":id", $id_vaga);

        try {
            $stmt->execute();
        } catch (PDOException $execption)  {
            echo $execption->getMessage();
        }
    }

    public function __destruct(){
            $this->con = null;
    }
}
?>