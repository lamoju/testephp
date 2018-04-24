<?php

class Disciplina{
    private $nomeAluno, $disciplina, $notaP1, $notaP2;
    
    public function Disciplina($nomeAluno, $disciplina, $notaP1, $notaP2){
        $this->nomeAluno = $nomeAluno;
        $this->disciplina = $disciplina;
        $this->notaP1 = $notaP1;
        $this->notaP2 = $notaP2;
    }
    
    public function isAprovado(){
        return 0.5*($this->notaP1 + $this->notaP2) >= 6
    }
    public function toJSON(){
        if($this->isAprovado())
            echo json_encode($this);
    }
}



?>