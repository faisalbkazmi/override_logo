<?php
namespace Excellence\Logo\Block\Rewrite\Html\Header;

class Logonew extends \Magento\Theme\Block\Html\Header\Logo
{
	
    public function getLogoSrc()
    {         
     
      if (empty($this->_data['logo_src'])) {
            $this->_data['logo_src'] = $this->_getLogoUrl();
        }
        
        return "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSeAzSHxwaoZXuiQb8mHLlr3W6zYWRjJdXKcBrlo6rvN-vQHcr4";
    }

    
}