<?php
class Config {
  private host = "localhost";
  private username = "root";
  private password = "";
  private database = "cbit";
  public connection;

  public function __construct (){
      if(!$this->connection){
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->database);
      }
  return $this->connection;

  }
  public function insert($sql){
     $result = $this->connection->query($sql);
     if($result){
        echo "Success";
     }
     else{
        echo "Not successful";
     }
  }
  public function update($sql){
      $result = $this->connection->query($sql);
      if($result){
        echo "Success";
      }
      else{
        echo "Not successful";
      }
  }
  public function delete($sql){
      $result = $this->connection->query($sql);
      if($result){
          echo "Success";
      }
      else{
          echo "Not succesful";
      }
  }
  public function read_admin($sql){
      $result = $this->connection->query($sql);
      $admin_data= array();
      $i = 0;
      while($rows=$result->fetch_assoc()){
           $admin_data[$i]["id"] = $rows["id"];
           $admin_data[$i]["admin_name"] = $rows["admin_name"];
           $admin_data[$i]["password"] = $rows["password"];
      }
      return $admin_data;
  }
  public function read_blogs($sql){
    $result = $this->connection->query($sql);
    $blogs_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $blogs_data[$i]["id"] = $rows["id"];
         $blogs_data[$i]["p1"] = $rows["p1"];
         $blogs_data[$i]["p2"] = $rows["p2"];
         $blogs_data[$i]["p3"] = $rows["p3"];
         $blogs_data[$i]["p4"] = $rows["p4"];
         $blogs_data[$i]["pic"] = $rows["pic"];
         $blogs_data[$i]["title"] = $rows["title"];
         $blogs_data[$i]["quote"] = $rows["quote"];
         $blogs_data[$i]["category"] = $rows["category"];
         $blogs_data[$i]["date2"] = $rows["date2"];
        
    }
    return $blogs_data;
}
public function read_chats($sql){
    $result = $this->connection->query($sql);
    $blogs_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $blogs_data[$i]["id"] = $rows["id"];
         $blogs_data[$i]["p1"] = $rows["p1"];
         $blogs_data[$i]["p2"] = $rows["p2"];
         $blogs_data[$i]["p3"] = $rows["p3"];
         $blogs_data[$i]["p4"] = $rows["p4"];
         $blogs_data[$i]["pic"] = $rows["pic"];
         $blogs_data[$i]["title"] = $rows["title"];
         $blogs_data[$i]["quote"] = $rows["quote"];
         $blogs_data[$i]["category"] = $rows["category"];
         $blogs_data[$i]["date2"] = $rows["date2"];
        
    }
    return $blogs_data;
}
public function read_events($sql){
    $result = $this->connection->query($sql);
    $events_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $events_data[$i]["id"] = $rows["id"];
         $events_data[$i]["title"] = $rows["p1"];
         $events_data[$i]["des"] = $rows["des"];
         $events_data[$i]["pic"] = $rows["pic"];
         $events_data[$i]["body"] = $rows["body"];
         $events_data[$i]["category"] = $rows["category"];
         $events_data[$i]["day"] = $rows["day"];
         $events_data[$i]["month"] = $rows["month"];
         $events_data[$i]["year"] = $rows["year"];
        
    }
    return $events_data;
}
public function read_gallery($sql){
    $result = $this->connection->query($sql);
    $gallery_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $gallery_data[$i]["id"] = $rows["id"];
         $gallery_data[$i]["event"] = $rows["event"];
         $gallery_data[$i]["date"] = $rows["date"];
         $gallery_data[$i]["pic"] = $rows["pic"];
         $gallery_data[$i]["des"] = $rows["des"];
         $gallery_data[$i]["des2"] = $rows["des2"];       
        
    }
    return $gallery_data;
}
public function read_news($sql){
    $result = $this->connection->query($sql);
    $news_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $news_data[$i]["id"] = $rows["id"];
         $news_data[$i]["title"] = $rows["title"];
         $news_data[$i]["des"] = $rows["des"];
         $news_data[$i]["pic"] = $rows["pic"];
         $news_data[$i]["body"] = $rows["body"];
         $news_data[$i]["category"] = $rows["category"];
         $news_data[$i]["day"] = $rows["day"];
         $news_data[$i]["month"] = $rows["month"];    
         $news_data[$i]["year"] = $rows["year"];        
        
    }
    return $news_data;
}
public function read_portfolio($sql){
    $result = $this->connection->query($sql);
    $portfolio_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $portfolio_data[$i]["id"] = $rows["id"];
         $portfolio_data[$i]["title"] = $rows["title"];
         $portfolio_data[$i]["des"] = $rows["des"];
         $portfolio_data[$i]["pic"] = $rows["pic"];
         $portfolio_data[$i]["body"] = $rows["body"];
         $portfolio_data[$i]["category"] = $rows["category"];
         $portfolio_data[$i]["day"] = $rows["day"];
         $portfolio_data[$i]["month"] = $rows["month"];    
         $portfolio_data[$i]["year"] = $rows["year"];        
        
    }
    return $portfolio_data;
}
public function read_request($sql){
    $result = $this->connection->query($sql);
    $request_data= array();
    $i = 0;
    while($rows=$result->fetch_assoc()){
         $request_data[$i]["id"] = $rows["id"];
         $request_data[$i]["name"] = $rows["name"];
         $request_data[$i]["email"] = $rows["email"];
         $request_data[$i]["phone"] = $rows["phone"];
         $request_data[$i]["topic"] = $rows["topic"];
         $request_data[$i]["date"] = $rows["date"];
               
        
    }
    return $request_data;
}
}

?>
