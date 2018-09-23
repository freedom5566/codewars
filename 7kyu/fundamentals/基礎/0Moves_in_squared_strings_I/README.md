This kata is the first of a sequence of four about "Squared Strings".

You are given a string of `n` lines, each substring being `n` characters long: For example:

`s = "abcd\nefgh\nijkl\nmnop"`

We will study some transformations of this square of strings.

- Vertical mirror: vert_mirror (or vertMirror or vert-mirror)
```
vert_mirror(s) => "dcba\nhgfe\nlkji\nponm"
```
- Horizontal mirror: hor_mirror (or horMirror or hor-mirror)
```
hor_mirror(s) => "mnop\nijkl\nefgh\nabcd"
```

or printed:
```
vertical mirror   |horizontal mirror   
abcd --> dcba     |abcd --> mnop 
efgh     hgfe     |efgh     ijkl 
ijkl     lkji     |ijkl     efgh 
mnop     ponm     |mnop     abcd
````
# Task:

-   Write these two functions

and

-   high-order function `oper(fct, s)` where

    - fct is the function of one variable f to apply to the string `s` (`fct will be one of vertMirror, horMirror`)
# Examples:
```
s = "abcd\nefgh\nijkl\nmnop"
oper(vert_mirror, s) => "dcba\nhgfe\nlkji\nponm"
oper(hor_mirror, s) => "mnop\nijkl\nefgh\nabcd"
```
# Note:
The form of the parameter fct in oper changes according to the language. You can see each form according to the language in "Sample Tests".

# Bash Note:
The input strings are separated by `,` instead of `\n`. The ouput strings should be separated by `\r` instead of `\n`. See "Sample Tests".

Forthcoming katas will study other tranformations.

7kyu的每題我都要想好久.......

這感覺很棒

自己獨立思考、google的感覺

雖然也有點小小的挫折

這一題一開始的思路是

我用explode拆掉

處理完

然後implode組回去

誰知道`implode('\n',$s)`

codewars不管單引號還是雙引號或著補個`\`

一律幫你換行 T_T

明明php online測試 `'\n'`不會被轉成換行阿！！！！！

只好換思路了 
