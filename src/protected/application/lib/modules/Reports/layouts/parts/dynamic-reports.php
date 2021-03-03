<?php
use MapasCulturais\i;
//$route = MapasCulturais\App::i()->createUrl('reports', $action, ['opportunity' => $opportunity->id, 'action' => $action]);
?>


<div class="dinamic-grafic-" style="position: relative; height:auto; width:100%;">    
    <canvas id="dinamic-grafic-"></canvas>
</div>

<div class="chart-wrap" ng-repeat="grafic in data.loadingGrafics">
    
        <header>
            <h3>{{grafic.title}}</h3>
            <a href="" name="{{grafic.identifier}}" class="hltip download" title="<?php i::_e("Baixar em CSV"); ?>"></a>
        </header>
        <div class="chart-container dinamic-grafic-{{grafic.identifier}}" style="position: relative; height:200px; width:100%;">
            <canvas id="dinamic-grafic-{{grafic.identifier}}"></canvas>
        </div>
        
        <footer>
            <div class="legends-chats">
                <div class="each" ng-repeat="legend in grafic.legends">
                    <span class="dot" style="background-color: {{legend.color}}"></span><p>{{legend.value}}</p>
                </div>
            </div>
        </footer>

    </div>

