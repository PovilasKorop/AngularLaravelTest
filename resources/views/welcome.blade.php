<html>
<head>
    <title>Angular JS Includes</title>

    <style>
        table, th , td {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
        }

        table tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style>

</head>
<body>
<h2>AngularJS Sample Application</h2>
<div ng-app = "myApp" ng-controller = "assessmentController">

    <table>
        <tr>
            <th>Question</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>

        <tr ng-repeat = "question in questions">
            <td>@{{ question.question }}</td>
            <td><input type="radio" name="question[@{{ question.id }}]" value="1" /></td>
            <td><input type="radio" name="question[@{{ question.id }}]" value="2" /></td>
            <td><input type="radio" name="question[@{{ question.id }}]" value="3" /></td>
            <td><input type="radio" name="question[@{{ question.id }}]" value="4" /></td>
            <td><input type="radio" name="question[@{{ question.id }}]" value="5" /></td>
        </tr>
    </table>

</div>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>

<script>
    var module = angular.module('myApp', []);

    module.controller('assessmentController', function($scope, $http) {
        $scope.questions = [];
        $scope.result = '';
        var url = "/questions";

        $http.get(url).then(function (response) {
            $scope.questions = response.data;
        });
    });
</script>

</body>
</html>