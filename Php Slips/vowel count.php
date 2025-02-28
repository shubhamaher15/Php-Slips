<html>
  <form method="POST" action="vowel count.php">
    Enter String:
    <input type="text" name="t1"><br><br>
    <input type="radio" name="r1" value="r1">Total Vowel Count<br><br>
    <input type="radio" name="r1" value="r2">Total Occurrences count<br><br>
    <input type="radio" name="r1" value="r3">Palindrome Or Not<br><br>
    <input type="submit" value="Button">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1 = $_POST["t1"];
    $ch = $_POST["r1"];

    switch ($ch) {
      case "r1":
        totalVowelCount($s1);
        break;
      case "r2":
        totalOccurrencesCount($s1);
        break;
      case "r3":
        isPalindrome($s1);
        break;
      default:
        echo "Invalid choice.";
        break;
    }

    function totalVowelCount($s1)
    {
      $cnt = 0;
      for ($i = 0; $i < strlen($s1); $i++) {
        if (
          $s1[$i] == 'a' || $s1[$i] == 'A' || $s1[$i] == 'e' || $s1[$i] == 'E' ||
          $s1[$i] == 'i' || $s1[$i] == 'I' || $s1[$i] == 'O' || $s1[$i] == 'o' ||
          $s1[$i] == 'u' || $s1[$i] == 'U'
        ) {
          $cnt++;
        }
      }
      echo("Total Vowel Count: " . $cnt);
    }

    function totalOccurrencesCount($s1)
    {
      $A = 0;
      $B = 0;
      $C = 0;
      $D = 0;
      $E = 0;
      for ($i = 0; $i < strlen($s1); $i++) {
        if ($s1[$i] == 'A' || $s1[$i] == 'a') {
          $A++;
        } elseif ($s1[$i] == 'E' || $s1[$i] == 'e') {
          $B++;
        } elseif ($s1[$i] == 'I' || $s1[$i] == 'i') {
          $C++;
        } elseif ($s1[$i] == 'O' || $s1[$i] == 'o') {
          $D++;
        } elseif ($s1[$i] == 'U' || $s1[$i] == 'u') {
          $E++;
        }
      }

      echo("<br><br>A Count : " . $A);
      echo("<br><br>E Count : " . $B);
      echo("<br><br>I Count : " . $C);
      echo("<br><br>O Count : " . $D);
      echo("<br><br>U Count : " . $E);
    }

    function isPalindrome($s1)
    {
      $rev = strrev($s1);
      if ($rev == $s1) {
        echo("<br> Palindrome String......");
      } else {
        echo("<br> Not a Palindrome String......");
      }
    }
  }
  ?>
</html>
