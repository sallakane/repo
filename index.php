<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body ng-app>

        <?php 
        
            echo inversion('NDIAGA');
            
            function inversion($chaine){
                $retour = '';
                $i = 0;
                while (isset($chaine[$i])) {
                    $retour = $chaine[$i].$retour;
                    $i++;
                }
                return $retour;
            }
            
        ?>
        
        <input type="text" ng-model="task" />
        
        {{task}}
        

        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
    </body>
</html>