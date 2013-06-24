<?php
/* /app/View/Helper/LinkHelper.php */
App::uses('AppHelper', 'View/Helper');
App::uses('Multibyte', 'I18n');
App::uses('Inflector', 'Utility');

class LinkHelper extends AppHelper {
	
	public function geraLinkImagemOriginalPaginas ($imagem) {
		
	    $url = "/paginas/";
        $url.= $imagem;
        
        return $url;
		
	}
	
	
	public function makeLink ($slug, $id) {
		
		$url = $slug ;
		$url.= '-';
		$url.= $id ;
		$url.= '.html';
		
		return $url;
		
	}
	
	public function makeLinkImgDir ($tamanho, $img, $dir) {
		
		if ($tamanho != 'original') {
			$thumb = "/app/webroot/";
			$thumb.=$dir;
		} else {
			$thumb= '/';
			$thumb.= $dir;
			$thumb.= '/';
		}
		
		
		if ($tamanho != 'original') {
	        $thumb.= "/thumb.";
	        $thumb.= $tamanho;
	        $thumb.= ".";
			
		}
        $thumb.= $img;
        
        return $thumb;
    }
	
	public function makeEmbed ($url) {
		
		//<iframe width="560" height="315" src="http://www.youtube.com/embed/rhzmNRtIp8k" frameborder="0" allowfullscreen></iframe>
		$video = '<iframe width="300" height="245"';
		$video.= 'src="http://www.youtube.com/embed/';
		$video.= $url;
		$video.= '" frameborder="0" allowfullscreen></iframe>';
		
		return $video;
		
		
	}
	
    
}