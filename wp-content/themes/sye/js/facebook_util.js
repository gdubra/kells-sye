jQuery(document).ready(function() {
	 FB.init({
        appId  : '609438905788059',
        status : true, // check login status
        loging: true
      });
	
	
});

function share_facebook(link,pic_url,title,excerpt){
	FB.ui(
			  {
			    method: 'feed',
			    name: title,
			    link: link,
			    picture: pic_url,
			    caption: 'Seguridad y Evaluación - Sistema Regional de Evaluación de Impacto en Políticas de Seguridad Ciudadana',
			    description: excerpt
			  }
			);
}