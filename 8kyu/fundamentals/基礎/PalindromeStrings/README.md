# Description:
Palindrome strings
A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward. This includes capital letters, punctuation, and word dividers.

Examples
```

"anna"   ==> true
"walter" ==> false
12321    ==> true
123456   ==> false
```

看到別人答案超傻眼
```php
function is_palindrome($line) {
  return $line == strrev($line);
}
```

直接結束

那我還判斷那麼多