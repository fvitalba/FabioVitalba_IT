<?php
	class Database	{
		
		function database()	{

			if (!mysql_connect('localhost', 'root', 'usbw'))	{
				echo "Datenbankverbindung konnte nicht aufgebaut werden.";
			}	else	{
				if (!mysql_select_db('fabiovitalba'))	{
					echo "Datenbank konnte nicht gefunden werden.";
				}
			}

		}
		
		function doSQLQuery ($sqlQuery)	{

			$ergebnis = mysql_query($sqlQuery);
			
			$datensatz = array();
			
			while($row = mysql_fetch_array($ergebnis))	{
				array_push($datensatz, $row);
			}
			
			return $datensatz;

		}
		
		function doSimpleSQL ($sqlQuery)	{

			$ergebnis = mysql_query($sqlQuery);

		}
		
		function getPage ($id)	{
			
			$pages = $this->doSQLQuery("SELECT * FROM pages WHERE id=".$id);
			if ($pages == NULL)	{
				$page = NULL;
			}	else	{
				$page = $pages[0];
			}
			return $page;

		}

		function ChildPageCount($id)	{

			$pages = $this->doSQLQuery("SELECT * FROM pages WHERE parent=".$id);
			
			return count($pages);

		}

		function getPageName ($id)	{
			
			$pages = $this->doSQLQuery("SELECT * FROM pages WHERE id=".$id);
			if ($pages == NULL)	{
				$page = "Page not found.";
			}	else	{
				$page = $pages[0]["name"];
			}
			return $page;

		}

		function getPageCount ()	{

			$pages = $this->doSQLQuery("SELECT * FROM pages");
			
			return count($pages);

		}

		function getChildPages($id)	{

			$pages = $this->doSQLQuery("SELECT * FROM pages WHERE parent=".$id);
			if ($pages == NULL)	{
				return NULL;
			}	else	{
				return $pages;
			}


		}
		
		function getText ($id, $lang)	{
			/*
			if (strcasecmp($lang, "de") == 0)	{
				$lang = "de";
			}	else if (strcasecmp($lang, "it") == 0)	{
				$lang = "it";
			}	else if (strcasecmp($lang, "en") == 0)	{
				$lang = "en";
			}	else 	{
				$lang = "de";
			}

			$texts = $this->doSQLQuery("SELECT * FROM content WHERE ID=".$id);
			
			if ($texts == NULL)	{
				$text = "Text nicht gefunden.";
			}	else	{
				$text = $texts[0][$lang];
			}
			return $text;
			*/
		}
		
	}
?>