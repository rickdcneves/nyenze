<?php

namespace Src\Interfaces;
interface interfaceView {

    public function setDir($Dir);

    public function setTitle($Title);

    public function setDescription($Description);

    public function setKeywords($Keywords);
    
    public function renderLayout();

}
