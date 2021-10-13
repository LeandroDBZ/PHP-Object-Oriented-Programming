<?php
namespace Livro\Core;

/**
 * Carrega a classe do framework
 */
class ClassLoader{
    protected $prefixes = array();

    public function register(){
        spl_autoload_register(array($this, 'loadClass'));
    }
    public function addNamespace($prefix, $base_dir, $prepend = false){
        // normaliza o prefixo do namespace
        $prefix = trim($prefix, '\\') . '\\';

        // normaliza o diretório base com um separador à direita
        $base_dir = rtrim($base_dir, DIRECTORY_SEPARATOR) . '/';

        // inicializar o array de prefixo de namespace
        if (isset($this->prefixes[$prefix]) === false) {
            $this->prefixes[$prefix] = array();
        }

        // retém o diretório base para o prefixo do namespace
        if ($prepend) {
            array_unshift($this->prefixes[$prefix], $base_dir);
        } else {
            array_push($this->prefixes[$prefix], $base_dir);
        }
    }
    public function loadClass($class){
        // o prefixo do namespace atual
        $prefix = $class;

        //retrocede os namespace da classe totalmente 
        //qualificada para encontrar um nome de arquivo mapeado
        while (false !== $pos = strrpos($prefix, '\\')) {

            // manter o separador de namespace final no prefixo
            $prefix = substr($class, 0, $pos + 1);

            // o resto é o nome relativo da classe
            $relative_class = substr($class, $pos + 1);

            // tenta carregar um arquivo mapeado para o prefixo e a classe relativa
            $mapped_file = $this->loadMappedFile($prefix, $relative_class);
            if ($mapped_file) {
                return $mapped_file;
            }

            // remova o separador de namespace final para a próxima iteração de strrpos ()
            $prefix = rtrim($prefix, '\\');   
        }

        // Não encontrou um arquivo mapeado
        return false;
    }
    protected function loadMappedFile($prefix, $relative_class){
        // há algum diretório base para este prefixo de namespace?
        if (isset($this->prefixes[$prefix]) === false) {
            return false;
        }

        // procure por este prefixo de namespace nos diretórios de base
        foreach ($this->prefixes[$prefix] as $base_dir) {

            // substitua o prefixo do namespace pelo diretório base, 
            //substitua os separadores do namespace pelos separadores 
            //do diretório no nome da classe relativa, acrescente .php
            $file = $base_dir
                  . str_replace('\\', '/', $relative_class)
                  . '.php';

            // se o arquivo mapeado existir, cria um require 
            if ($this->requireFile($file)) {
                return $file;
            }
        }

        // Não encontrado
        return false;
    }
    protected function requireFile($file){
        if (file_exists($file)) {
            require $file;
            return true;
        }
        return false;
    }
}
