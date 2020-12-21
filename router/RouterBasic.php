<?php


class Route{

    private static $routes = Array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;
  
    public static function add($expression, $function, $method = 'get'){
        
      array_push(self::$routes,Array(
        'expression' => $expression,
        'function' => $function,
        'method' => $method
      ));
    }
  
    public static function pathNotFound($function){
      self::$pathNotFound = $function;
    }
  
    public static function methodNotAllowed($function){
      self::$methodNotAllowed = $function;
    }
  
    public static function run($basepath = '/'){
  
      //parse_url을 하면 '/' => 'path' 키로 담긴다
      $parsed_url = parse_url($_SERVER['REQUEST_URI']);//Parse Uri
   
     
      // '/'가 있는지 체크
      if(isset($parsed_url['path'])){
        $path = $parsed_url['path'];
      }else{
        $path = '/';
      }
  
      // Get current request method
      $method = $_SERVER['REQUEST_METHOD'];
  
      $path_match_found = false;
  
      $route_match_found = false;
  
      //전체 경로 보관해둔 arr에서 하나씩 빼면서 비교
      foreach(self::$routes as $route){
  
        // If the method matches check the path
  
        // Add basepath to matching string
        if($basepath!=''&&$basepath!='/'){
          $route['expression'] = '('.$basepath.')'.$route['expression'];
        }
  
        // Add 'find string start' automatically
        // '^' : 경로 시작 구분자
        $route['expression'] = '^'.$route['expression'];
  
        // Add 'find string end' automatically
        // '$' : 경로 끝 구분자
        $route['expression'] = $route['expression'].'$';
  
        
        //echo $route['expression'].'<br/>';
        
  
        //일치하는 경로 찾음
        if(preg_match('#'.$route['expression'].'#',$path,$matches)){
      
          $path_match_found = true;
  
          //http 메소드 체크
          if(strtolower($method) == strtolower($route['method'])){
  
            
            array_shift($matches);// Always remove first element. This contains the whole string
            
            if($basepath!=''&&$basepath!='/'){
              array_shift($matches);// Remove basepath
            }

            //해당 경로의 callback 함수 실행
            call_user_func_array($route['function'], $matches);
  
            $route_match_found = true;
  
            // Do not check other routes
            break;
          }
        }
      }
  
      // No matching route was found
      if(!$route_match_found){
  
        // But a matching path exists
        if($path_match_found){
          header("HTTP/1.0 405 Method Not Allowed");
          if(self::$methodNotAllowed){
            call_user_func_array(self::$methodNotAllowed, Array($path,$method));
          }
        }else{
          header("HTTP/1.0 404 Not Found");
          if(self::$pathNotFound){
            call_user_func_array(self::$pathNotFound, Array($path));
          }
        }
  
      }
  
    }
  
  }

?>