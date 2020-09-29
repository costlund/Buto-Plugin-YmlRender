<?php
class PluginYmlRender{
  function __construct() {
    wfPlugin::includeonce('wf/yml');
    wfPlugin::includeonce('wf/array');
  }
  public function widget_render($data){
    $data = new PluginWfArray($data);
    if($data->get('data/yml')){
      foreach($data->get('data/yml') as $v){
        $i = new PluginWfArray($v);
        if($i->get('filename')){
          if(wfFilesystem::fileExist(wfGlobals::getAppDir().$i->get('filename'))){
            $yml = new PluginWfYml(wfGlobals::getAppDir().$i->get('filename'));
            wfDocument::renderElement($yml->get());
            break;
          }
        }
      }
    }
  }
}
