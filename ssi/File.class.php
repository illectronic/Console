<?

session_start();
date_default_timezone_set('America/New_York');


class File {

   	public  $fileName       = '';
   	private $line_delimiter = "\n";
   	private $data_delimiter = "\t";
   	private $error          = '';
   	private $fileMode       = 'r+';


	function __construct(){
   	} 


   	public function setFileName( $fileName = '' ){
      	   $this->fileName = trim( $fileName );
   	}


   	public function getFileName(){
      	   return( $this->fileName );
   	}

	public function setMode( $mode = 'w+' ){
      	   if( trim( $mode ) != '' ){
	      $this->fileMode = $mode;
 	   }
	}


	public function getMode(){
 	   return( $this->fileMode );
	}


   	public function setLineDelimiter( $delimter = "\n" ){
      	   if( trim( $delimiter ) != '' ){
              $this->line_delimiter = $delimter;
      	   }
   	}


   	public function getLineDelimiter(){
      	   return( $this->line_delimiter );
   	}


   	public function setDataDelimiter( $delimiter = "\t" ){
      	   if( trim( $delimiter ) != '' ){
              $this->data_delimiter = $delimter;
      	   }
   	}


   	public function getDataDelimiter(){
           return( $this->data_delimiter );
   	}




        //-------------------------------------------
        // function:    readFile()
        // author:      Stephen Reid
        // written:     May 23, 2012
        //
	// usage:	$f = new File();
	//
	//		$f->setMode( 'r' );
	//		$f->setFileName( 'test.txt' );
	//
	//		$buffer = '';
	//
	//		if(! $f->readFile( $buffer )){
	//	  	   print $f->getError();
	//		   die;
	//		}
	//
	//		print $buffer;
	//
	//
        // notes:       reads text data from a file.
	//		To read binary data use the following:
	//
	//		$f->setMode( 'rb' ); 
        //-------------------------------------------
        public function readFile( &$buffer ){

	   if( trim( $this->fileName ) == '' ){
              $this->setError( 'A filename was not specified!' );
	      return(FALSE);
	   }


           if(($fh = fopen( $this->fileName , $this->fileMode )) === FALSE){
              $this->setError( 'Failed to open ' . $this->fileName . ' for writing!' );
              return(FALSE);
           }

           $buffer = fread($fh, filesize($this->fileName));

           if( $buffer === FALSE ){
              $this->setError( 'Failed to read from ' . $this->fileName . ' !' );
              fclose($fh);
              return(FALSE);
           }

           fclose($fh);

           return(TRUE);
        }



        //-------------------------------------------
        // function:    writeFile()
        // author:      Stephen Reid
        // written:     May 23, 2012
        //
	// usage:	$f = new File();
	//
	//		$f->setFileName( 'test.txt' );
	//
	//		$text_data = 'hello world';
	//
	//		if(! $f->writeFile( $text_data )){
	//	  	   print $f->getError();
	//		   die;
	//		}
	//
        // notes:       writes text data to a file.
	//		To write binary data use the following:
	//
	//		$f->setMode( 'wb' ); 
        //-------------------------------------------
        public function writeFile( $buffer ){

	   if( trim( $this->fileName ) == '' ){
              $this->setError( 'A filename was not specified!' );
	      return(FALSE);
	   }


           if(($fh = fopen( $this->fileName , $this->fileMode )) === FALSE){
              $this->setError( 'Failed to open ' . $this->fileName . ' for writing!' );
              return(FALSE);
           }


           $bytes = fwrite($fh, $buffer );

           if( $bytes === FALSE ){
              $this->setError( 'Error writing to ' . $this->fileName . '!' );
              fclose($fh);
              return(FALSE);
           }

           fclose($fh);

           return(TRUE);
        }




     	//-------------------------------------------
        // function:    writeLogFile()
        // author:      Stephen Reid
        // written:     Jul 18, 2012
        //
        // usage:       $f = new File();
        //
        //              $f->setFileName( '/tmp/logfile.log' );
        //
        //              $message = 'hello world';
        //
        //              if(! $f->writeLogFile( $message )){
        //                 print $f->getError();
        //                 die;
        //              }
        //
        // notes:       Writes session data to a file in append mode.
	//	 	The IP adddress and date are also saved.	
        //-------------------------------------------
	function writeLogFile( $message = ''){

	   if( trim( $this->fileName ) == '' ){
	      $this->setError('Error: fileName was not set!' );
 	      return( FALSE );
	   }


           $this->setMode( 'a+' );

           //--------------------------------------//
           // Prepare to append login information. //
           //--------------------------------------//
           $data    =      '[' 			. date('D M j G:i:s Y') 	. '] '  .
                           '[' 			. $_SERVER['REMOTE_ADDR'] 	. '] '  .
                           '[employee id: "'    . $_SESSION['S_EMPLOYEE_ID']    . '"] ' .
                           '[employee type: "'  . $_SESSION['S_EMPLOYEE_TYPE']  . '"] ' .
                           '[employee name: "'  . $_SESSION['S_EMPLOYEE_NAME']  . '"] ' .
                           '[employee title: "' . $_SESSION['S_EMPLOYEE_TITLE'] . '"] ' .
                           '[employee code: "'  . $_SESSION['S_EMPLOYEE_CODE']  . '"] ' .
                           '[site: "'           . $_SESSION['S_SITE']           . '"] ' .
                           '[file: "'           . $_SERVER['PHP_SELF']     	. '"] ' .
                           '[message: "'        . $message . "\"]\n";


           if( !$this->writeFile( $data ) ){
              return( FALSE );
           }

           chmod( $this->getFileName(), 0666 );

           return(TRUE);
	}




        //-------------------------------------------
        // function:    setError()
        // author:      Stephen Reid
        // written:     May 24, 2012
        //
        // notes:       sets an error.
        //-------------------------------------------
        public function setError( $error ){
           $this->error = $error;
        }





        //-------------------------------------------
        // function:    getError()
        // author:      Stephen Reid
        // written:     May 24, 2012
        //
        // notes:       gets an error message.
        //-------------------------------------------
        public function getError(){
           return( $this->error );
        }





} // end of File class

?>
