<?php

  /**
   * get all customers
   *
   * @return mysqli_result
   */
  function get_recipes()
  {
      global $db_connection;
      $query = 'SELECT * ';
      $query .= 'FROM recipes';
      $result = mysqli_query($db_connection, $query);

      if ($result && $result->num_rows > 0) {
          $recipes = $result;
      } else {
          $recipes = null;
      }

      return $recipes;
  }

  /**
   * Search customers
   *
   * @param string $keyword search word
   * @return mysqli_result
   */
  function search_recipe_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= ' WHERE ';
      $query .= "title LIKE '%" . $keyword . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $results = $result;
      } else {
          $results = null;
      }
      return $results;
  }

    /**
   * Search customers
   *
   * @param string $keyword search word
   * @return mysqli_result
   */
  function find_category($category)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= ' WHERE ';
      $query .= "category LIKE '%" . $category . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $results = $result;
      } else {
          $results = null;
      }
      return $results;
  }