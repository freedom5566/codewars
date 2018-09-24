# Description:


You will be given a string (x) featuring a cat 'C' and a mouse 'm'. The rest of the string will be made up of '.'.



You need to find out if the cat can catch the mouse from it's current position. The cat can jump over three characters. So:



C.....m returns 'Escaped!' <-- more than three characters between




C...m returns 'Caught!' <-- as there are three characters between the two, the cat can jump.


# 感想

看完題目覺得這題很簡單+好可愛

結果開始各種爆炸

只好去猜隱藏測資好不容易才過

結果看到網友答案，想說這種直接判斷字串長度的答案是怎樣？？

結果居然也能過RRRRRR

我覺得preg那個答案比較OK

因為隨機測資會類似這種東西

```
C.....mC..mC.............mC.m
```

這......