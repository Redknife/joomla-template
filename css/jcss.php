<?php 

class jCSS
{
	private $_path;
	private $_css;
	
	
	public function __construct($include)
	{
		$this->_path = dirname(__FILE__);
		$this->_css = $include;
	}
	
	public function render()
	{
		ob_start();
		foreach ($this->_css as $file)
		{
			$cssFile = $this->_path.DIRECTORY_SEPARATOR.$file;
			if (file_exists($cssFile))
				include($cssFile);
		}
		
		$ok = ob_get_contents();
		ob_end_clean();
		
		header('Content-type: text/css');
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		echo $this->compress($ok);
	}

	protected function cache($cacheTime)
	{
		
	}
	
	public function compress($buffer) {
		/* remove comments */
		    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
		/* remove tabs, spaces, new lines, etc. */        
		    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
		/* remove unnecessary spaces */        
		    $buffer = str_replace('{ ', '{', $buffer);
		    $buffer = str_replace(' }', '}', $buffer);
		    $buffer = str_replace('; ', ';', $buffer);
		    $buffer = str_replace(', ', ',', $buffer);
		    $buffer = str_replace(' {', '{', $buffer);
		    $buffer = str_replace('} ', '}', $buffer);
		    $buffer = str_replace(': ', ':', $buffer);
		    $buffer = str_replace(' ,', ',', $buffer);
		    $buffer = str_replace(' ;', ';', $buffer);
		    
		return $buffer;
		}
}


	$css = new jCSS(array('bootstrap.min.css', 'modules.css', 'template.css', 'typo.css', 'social.css'));
	$css->render();
	
?>