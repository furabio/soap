<?php

class HomeController
{
	
	public function index() 
	{
		return require_once 'view/header.php';
	}

	public function lol() {
	    echo "t";
    }
	// function buscar()
	// {
	// 	include "lib/nusoap.php";

	// 	$client = new nusoap_client("http://localhost/exercicio/empresas/servicos/empresaServiceNusoap.php?wsdl");
	// 	$ret = $client->call("empresaServiceNusoap.listarEmpresaService");
	// 	$retorno = json_decode($ret, true);
	// 	require_once "visao/listarEmpresas.php";
	// }//buscar
	
	// function inserir()
	// {
	// 		//mostrar a visao
	// 		require_once "visao/cadastrarEmpresas.php";
	// 		if($_POST)
	// 		{
	// 			//acessar o serviço externo
	// 			$resultado = file_get_contents('https://www.receitaws.com.br/v1/cnpj/' . $_POST['cnpj']);  
	// 			$resultado = json_decode($resultado, true);

	// 			//obter os dados e acessar seu serviço rest para inserir no BD
	// 			$curl = curl_init("http://localhost/exercicio/empresas/servicos/empresaServiceRest.php");

	// 			$dados = array("cnpj" => $resultado['cnpj'], "nome" => $resultado['nome'], "fantasia" => $resultado['fantasia'], "email" => $resultado['email'], "atividade" => $resultado['atividade_principal'][0]['text'], "municipio" => $resultado['municipio'], "uf" => $resultado['uf'], "abertura" => $resultado['abertura'], "natureza" => $resultado['natureza_juridica'], "capital" => $resultado['capital_social'], "situacao" => $resultado['situacao']);

	// 			//informar que os dados seram passados via POST
	// 			curl_setopt($curl, CURLOPT_POST, true);
	// 			//passar os dados
	// 			curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
	// 			//executar
	// 			curl_exec($curl);
	// 			//finalizar
	// 			curl_close($curl);

	// 			header('location:index.php?controle=empresaControle&metodo=buscar');
	// 		}
	// }//inserir
}