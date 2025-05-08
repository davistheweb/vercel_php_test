<?php
class CheckPhpInfo{
    private string $phpinfodetails;

    public function __construct($phpinfodetails){
        $this->phpinfodetails = $phpinfodetails;
    }

    public function getPhpInfo(): string{
        return $this->phpinfodetails;
    }
}