This time no story, no theory. The examples below show you how to write function `accum`:

# Examples:

```
accum("abcd");    // "A-Bb-Ccc-Dddd"
accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt");    // "C-Ww-Aaa-Tttt"
```

The parameter of accum is a string which includes only letters from `a..z` and `A..Z`.

# Note:

this kata was recently attributed to @mclean, which is false (see his comment). Gosts at Codewars or bad joke? // g964

# 筆記：

我的寫法整整慢了best兩倍阿！！！

居然沒有想起implode的特色

str_repeat這招學習了

可以指定字串次數 