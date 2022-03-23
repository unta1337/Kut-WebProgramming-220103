<!DOCTYPE html>
<?php
    $name = "김성녕";
    $ph = "010-3198-3139";
    $address = "한기대 솔빛관";
    $email = "ipsy2003@koreatech.ac.kr";
?>
<html>
    <head>
        <meta charset="utf-8"></meta>
    </head>
    <body>
        <?php
            echo "<table border='1'>
                    <th>이름</th>
                    <th>휴대폰 번호</th>
                    <th>주소</th>
                    <th>이메일</th>
                    <tr>
                        <td>$name</td>
                        <td>$ph</td>
                        <td>$address</td>
                        <td>$email</td>
                    </tr>
                </table>"
        ?>
    </body>
</html>