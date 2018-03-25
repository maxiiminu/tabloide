app.controller('QuitandaController', function($scope, $http) {
    $scope.category = {
        hortifruti: {
            currentPage: 1,
            nextPage: 1,
            previousPage: 1,
            lastPage: 1,
            data: []
        },
        bebida: {
            currentPage: 1,
            nextPage: 1,
            previousPage: 1,
            lastPage: 1,
            data: []
        },
        diverso: {
            currentPage: 1,
            nextPage: 1,
            previousPage: 1,
            lastPage: 1,
            data: []
        },
        carne: {
            currentPage: 1,
            nextPage: 1,
            previousPage: 1,
            lastPage: 1,
            data: []
        },
        emporio: {
            currentPage: 1,
            lastPage: 1,
            data: []
        },
    }

    $scope.list = function(category, page) {

        $http({
            method: 'GET',
            url: '/list/' + category +'?page=' + page,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function successCallback(response) {
            $scope.category[category].currentPage = response.data.current_page;
            $scope.category[category].lastPage = response.data.last_page;
            $scope.category[category].data = response.data.data;

            if ((response.data.current_page - 1) < 1) {
                $scope.category[category].previousPage = response.data.last_page;
            } else {
                $scope.category[category].previousPage = response.data.current_page - 1;
            }

            if ((response.data.current_page + 1) > response.data.last_page) {
                $scope.category[category].nextPage = 1;
            } else {
                $scope.category[category].nextPage = response.data.current_page + 1;
            }
        }, function errorCallback(response) {
            console.log(response);
            alert('Erro');
        });
    }
});