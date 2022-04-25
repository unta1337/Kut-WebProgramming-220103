<?php
    # 공백 포함 문자열 길이 연산.
    function getFileLengthWithBlank($filePath) {
        $file = fopen($filePath, 'r');      # 파일 열기.
        $fileLength = 0;                    # 초기 길이를 0으로 설정.

        # 파일이 더 이상 읽히지 않을 때까지 반복.
        while (($content = fgets($file)) != null) {
            # 한 줄씩 읽으며 해당 줄의 문자 길이 연산.
            $fileLengthLocal = mb_strlen($content, 'utf-8') - 1;        # 마지막 개항 문자 등이 포함되므로 이를 제거하기 위해 -1.
            $fileLength += $fileLengthLocal;
        }
        $fileLength += 1;   # 마지막 줄에는 개행 문자가 포함되지 않으므로 이를 채워주기 위해 +1.

        fclose($file);                      # 파일 닫기.
        return $fileLength;
    }

    function getFileLengthWithoutBlank($filePath) {
        $file = fopen($filePath, 'r');
        $fileLength = 0;

        while (($content = fgets($file)) != null) {
            $contentLocal = preg_split('/\s+(\r|\n|\r\n)?/', $content);     # 정규식을 활용한 문자열 분리로 공백 제거.
            $fileLengthLocal = 0;

            # 공백이 제거된 문자열에 대해 글자 수 세기.
            for ($i = 0; $i < count($contentLocal); $i++)
                $fileLengthLocal += mb_strlen($contentLocal[$i]);
            $fileLength += $fileLengthLocal;
        }

        fclose($file);
        return $fileLength;
    }

    $filePath = '../assets/lesson6_txt.txt';

    echo "text 글자 수 (공백 포함): ".getFileLengthWithBlank($filePath)."자<br>";
    echo "text 글자 수 (공백 제외): ".getFileLengthWithoutBlank($filePath)."자";
?>