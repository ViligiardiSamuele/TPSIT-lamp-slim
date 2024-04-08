<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AlunniController
{
  public function getAlunni(Request $request, Response $response, $args){
    $result = $Database::getInstance()->query("SELECT * FROM alunni");
    $results = $result->fetch_all(MYSQLI_ASSOC);

    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }

  public function getAlunno(Request $request, Response $response, $args){
    $result = $Database::getInstance()->query("SELECT * FROM alunni WHERE id = ". $args["id"] ."");
    $results = $result->fetch_all(MYSQLI_ASSOC);

    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }

  public function postAlunno(Request $request, Response $response, $args){
    $postData = json_decode($request->getBody()->getContents(), true);
    $result = $Database::getInstance()->query("INSERT INTO alunni (nome, cognome) VALUES ('".$postData["nome"]."', '".$postData["cognome"]."' );");

    $results = ["results" => $result];
    if (!$result)
      $results["error"] = $mysqli_connection->error;

    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }

  public function putAlunno(Request $request, Response $response, $args){
    $postData = json_decode($request->getBody()->getContents(), true);
    $result = $Database::getInstance()->query("UPDATE alunni SET nome = '".$postData["nome"]."', cognome = '".$postData["cognome"]."' WHERE id = '".$postData["id"]."' ");

    $results = ["results" => $result];
    if (!$result)
      $results["error"] = $mysqli_connection->error;
    
    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }

  public function deleteAlunno(Request $request, Response $response, $args){
    $postData = json_decode($request->getBody()->getContents(), true);
    $result = $Database::getInstance()->query("DELETE FROM alunni WHERE id = ".$postData["id"]."");

    $results = ["results" => $result];
    if (!$result)
      $results["error"] = $mysqli_connection->error;
    
    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
  }
}