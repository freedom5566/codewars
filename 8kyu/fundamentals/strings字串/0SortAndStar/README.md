# You will be given an vector of string(s). You must sort it alphabetically (case-sensitive!!) and then return the first value.

The returned value must be a string, and have "***" between each of its letters.

You should not remove or add elements from/to the array.

這題應該是比對Ascii

但是每個字串的每個字母都要比對

後來發現php直接用sort就好哈哈

最佳實踐直接用implode搞定

我真的太大意了......