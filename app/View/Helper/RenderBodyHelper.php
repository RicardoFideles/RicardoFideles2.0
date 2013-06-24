<?php
/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');
App::uses('Multibyte', 'I18n');
App::uses('Inflector', 'Utility');

class RenderBodyHelper extends AppHelper {
	
	public function consertaLinks($subject) {
		
		if (preg_match_all('<img(?:.*?)src="(.*?)"(?:.*?)>', $subject, $matches)) {
	
			$novo = "";
				
			foreach ($matches[1] as $key => $value) {
				
				if (empty($novo)) {
					$texto = $subject;
				} else {
					$texto = $novo;
				}
				
				$split = split('../../app/webroot/uploads/images/', $value);
				$imagem = $split[1];
				
				$path = "/uploads/images/";
				$path.= $imagem;
				
			 	$novo =   str_replace($value, $path, $texto);
			}
			return $novo;
		} else {
			return $subject;
		}
	}
	
    
}