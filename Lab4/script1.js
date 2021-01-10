var arr = [];

        function createArray() {
            for (var i = 0; i < 10; i++) {
                arr[i] = [];
                for (var j = 0; j < 10; j++) {
                    arr[i][j] = Math.floor(Math.random() * 15);
                }
            }
        }

        function sortArray() {
            var note = 0;
            for (var i = 0; i < 10; i++) {
                for (var j = 0; j < 9; j++) {
                    for (var k = j + 1; k < 10; k++) {
                        if ((i % 2 == 0) && (arr[i][j] < arr[i][k])) {
                            note = arr[i][j];
                            arr[i][j] = arr[i][k]
                            arr[i][k] = note;
                        }
                    }
                }
            }
        }

        function printArray() {
            for (var i = 0; i < 10; i++) {
                for (var j = 0; j < 10; j++) {
                    document.write(arr[i][j] + " ");
                }
                document.write("<br>");
            }
        }