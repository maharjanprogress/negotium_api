<?php
$filename = "../productpic/womans_horlicks.jpg";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $file = fopen($filename, "rb");
    $response = fread($file, filesize($filename));
    fclose($file);
}
$imgData = "/9j/4AAQSkZJRgABAQEBLAEsAAD/7gAOQWRvYmUAZAAAAAAA/+0TrFBob3Rvc2hvcCAzLjAAOEJJ
TQQEAAAAAAAHHAIAAAIAAAA4QklNBCUAAAAAABDo8VzzL8EYoaJ7Z63FZNW6OEJJTQQvAAAAAABK
uB8BAEgAAABIAAAAAAAAAAAAAAAAAwAATAIAAPT////0////DAMAAFgCAAAAAQAFAAD8AwAAAQAP
JwEAcABzAGQAAAAuAHAAcwA4QklNA+0AAAAAABABLAAAAAEAAQEsAAAAAQABOEJJTQQmAAAAAAAO
AAAAAAAAAAAAAD+AAAA4QklNBA0AAAAAAAQAAAAeOEJJTQQZAAAAAAAEAAAAHjhCSU0D8wAAAAAA
CQAAAAAAAAAAAQA4QklNBAoAAAAAAAEAADhCSU0nEAAAAAAACgABAAAAAAAAAAI4QklNA/UAAAAA
AEgAL2ZmAAEAbGZmAAYAAAAAAAEAL2ZmAAEAoZmaAAYAAAAAAAEAMgAAAAEAWgAAAAYAAAAAAAEA
NQAAAAEALQAAAAYAAAAAAAE4QklNA/gAAAAAAHAAAP////////////////////////////8D6AAA
AAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAAA
AP////////////////////////////8D6AAAOEJJTQQAAAAAAAACAAA4QklNBAIAAAAAAAoAAAAA
AAAAAQABOEJJTQQwAAAAAAAFAQEBAQEAOEJJTQQtAAAAAAAGAAEAAAADOEJJTQQIAAAAAAAQAAAA
AQAAAkAAAAJAAAAAADhCSU0EHgAAAAAABAAAAAA4QklNBBoAAAAAA08AAAAGAAAAAAAAAAAAAAFJ
AAAF8gAAAA0AbABvAGcAbwBfAGkAZABfADIAOAAxADYAMgAAAAEAAAAAAAAAAAAAAAAAAAAAAAAA
AQAAAAAAAAAAAAAF8gAAAUkAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAQAAAA
AQAAAAAAAG51bGwAAAACAAAABmJvdW5kc09iamMAAAABAAAAAAAAUmN0MQAAAAQAAAAAVG9wIGxv
bmcAAAAAAAAAAExlZnRsb25nAAAAAAAAAABCdG9tbG9uZwAAAUkAAAAAUmdodGxvbmcAAAXyAAAA
BnNsaWNlc1ZsTHMAAAABT2JqYwAAAAEAAAAAAAVzbGljZQAAABIAAAAHc2xpY2VJRGxvbmcAAAAA
AAAAB2dyb3VwSURsb25nAAAAAAAAAAZvcmlnaW5lbnVtAAAADEVTbGljZU9yaWdpbgAAAA1hdXRv
R2VuZXJhdGVkAAAAAFR5cGVlbnVtAAAACkVTbGljZVR5cGUAAAAASW1nIAAAAAZib3VuZHNPYmpj
AAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBsb25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRv
bWxvbmcAAAFJAAAAAFJnaHRsb25nAAAF8gAAAAN1cmxURVhUAAAAAQAAAAAAAG51bGxURVhUAAAA
AQAAAAAAAE1zZ2VURVhUAAAAAQAAAAAABmFsdFRhZ1RFWFQAAAABAAAAAAAOY2VsbFRleHRJc0hU
TUxib29sAQAAAAhjZWxsVGV4dFRFWFQAAAABAAAAAAAJaG9yekFsaWduZW51bQAAAA9FU2xpY2VI
b3J6QWxpZ24AAAAHZGVmYXVsdAAAAAl2ZXJ0QWxpZ25lbnVtAAAAD0VTbGljZVZlcnRBbGlnbgAA
AAdkZWZhdWx0AAAAC2JnQ29sb3JUeXBlZW51bQAAABFFU2xpY2VCR0NvbG9yVHlwZQAAAABOb25l
AAAACXRvcE91dHNldGxvbmcAAAAAAAAACmxlZnRPdXRzZXRsb25nAAAAAAAAAAxib3R0b21PdXRz
ZXRsb25nAAAAAAAAAAtyaWdodE91dHNldGxvbmcAAAAAADhCSU0EKAAAAAAADAAAAAE/8AAAAAAA
ADhCSU0EEQAAAAAAAQEAOEJJTQQUAAAAAAAEAAAAEjhCSU0EDAAAAAAL3gAAAAEAAACgAAAAIwAA
AeAAAEGgAAALwgAYAAH/2P/gABBKRklGAAECAABIAEgAAP/tAAxBZG9iZV9DTQAC/+4ADkFkb2Jl
AGSAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBEMDAwMDAwRDAwMDAwMDAwM
DAwMDAwMDAwMDAwMDAwMDAwMDAENCwsNDg0QDg4QFA4ODhQUDg4ODhQRDAwMDAwREQwMDAwMDBEM
DAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgAIwCgAwEiAAIRAQMRAf/dAAQACv/EAT8A
AAEFAQEBAQEBAAAAAAAAAAMAAQIEBQYHCAkKCwEAAQUBAQEBAQEAAAAAAAAAAQACAwQFBgcICQoL
EAABBAEDAgQCBQcGCAUDDDMBAAIRAwQhEjEFQVFhEyJxgTIGFJGhsUIjJBVSwWIzNHKC0UMHJZJT
8OHxY3M1FqKygyZEk1RkRcKjdDYX0lXiZfKzhMPTdePzRieUpIW0lcTU5PSltcXV5fVWZnaGlqa2
xtbm9jdHV2d3h5ent8fX5/cRAAICAQIEBAMEBQYHBwYFNQEAAhEDITESBEFRYXEiEwUygZEUobFC
I8FS0fAzJGLhcoKSQ1MVY3M08SUGFqKygwcmNcLSRJNUoxdkRVU2dGXi8rOEw9N14/NGlKSFtJXE
1OT0pbXF1eX1VmZ2hpamtsbW5vYnN0dXZ3eHl6e3x//aAAwDAQACEQMRAD8A8tqqtutZTSx1ltjg
yutgLnOc47WMYxvuc9zl0vSug9OpyL8HOqd1LqrKLbPsWO87KXVMNgpttoD35WZY8em6jHd6eN/h
Lbb/ANDj1vqtdfiu6lkYrG2ZTMLbQHMD/ddk4eG9rWu/OtpyLaPb/pV1mNawY2djjCxMTCootb67
m249WYPTbXk3s+z2125VDMwb2fo7vSw7/wBB9mtZ+llEdWHJM6gOAzpX1dddXTm4l+HkWuDGYuNm
V5GQ57jsZWMX7I5lL/Udt2ZmZjWIeX0L6uMza8TEt6hkfadcOymmq8XDc6p3p1+tiWey+q6n/rfq
fzat9OyPq19trqwsJ7s57bGUW491lVHqvY6uhmP9uGVk+vY52zGyrfR9HK9D9ApvfXTiP6F0ltmO
crFrzKrHvFlzzfVXk5fSmWsro9Ki7Hbt2VV+pmZOL6V39I9Kt3CjiN7kef8AKTh9Z6HT0vKqppyR
mV3Utvba0NAEusqfV+ityKnuqspex76rrK1RFLeOT4BbHUa2nD6O46j7BA+WVmqoyqR4DwGikELV
xaalqihx4bHmU/oOHh8ldFIRBUP9QnDEgzc/0fHT5Lo8/wCoHUOn1XWZPUMBrqK3Wmn1HCxwYHH9
FW+tu9z9myv+Ws30d0fEflXZ/XjqOAcqzH+wYudZdjODM4kOsqLnWtaKiwP/AJn+eZ70faO1brJZ
TYrxt8+OJaJljhAkgsdoP3nfutTHEvifSeGjUucxwEeK9Z6nbS79qZYy6bGZXSfSrYLQXu2jLfu2
z9B/2hja/wCWqnUrs3H+qluLXm19QssxnfabL7mMLa/TG+nFxaPp2bP0dTHfn/zvqIcCBnvo+XjG
sc4Na3e52jWtBJJ/ktbu3JHFt3OYaXh7Ppt2klv9dsbmrv8A6u4NHRepZuKcvHPUMnBDsDJY4BjX
O9UGn1X/AEbt7aLHs/0a2MfMw/29jtyMimzOq6U6rqF4sbtc82Yx9F9stY57ntybNn+jsQMEnNR0
FvkxxXQT6boa1rnHa7Rrv5t7tPa2yf0f76g/Fcw7XsLHdw4Fp+5y9K6J1yzP6Nm2uzMXA6vfk1uu
3wxppb9mprrZS4Pdc12NVbi1sayz9J/xq5//ABgtL/rZkkEyaqJnt+jCaYro5CZGNVTyJoUDSQrz
q3Dgz8R/chua4ctn4IGLKJNIsITQrLtnfQ+YhDc0dtUwxC4Sf//Q4XoGRdjUdVysd/p3Y+JVZU8d
ntzcB7Ha/wApq1+m1WHrOZ1LHpfm4+T06/JZW8vtOywfZ78O6z33fobPXw/Vf7/5u9ZP1XbgXO6j
iZ+S3EqysQMa9xALnMyMXK9Ct1hZU2y5tDmMfa/06/prexab8lg6b6mNg9Notbk49WH1DHdY4t9u
TXfYy9tuTnZtH81lXs9KnIpqpp+yYltnpzXqwy0vp/3rkZXQsjEtJtt+y4DiHYuZkBzTZW4C2iyq
iplmTZb6b2er6dXp0X/o7ba1vZduF+0sHrDx9qjGoycvJsPpis49bLWNbh0FrWZWf+h+zWXZF9H2
jJ/mf0D0G2r61VZF2Ze/q19t7zY7H6Wbhjjcd3p/tFvrVbafobMWjIr/AO7KsdU6p1yqvByOo5l/
TOnnHrc+hs/ab7vd61FX2r1Mi9zYZvys2x+Ph/8AG+lRc7ipYbJG3Xq4fUrfVwekXv2t9TFucQ0A
NB+2ZjiGNH0WN3e1Gb0Hrc0gYjychzWUwWGXPYb6mna/9H6tLfVr9XZvWd1jrV/V8gXWBtLK2ejj
0s4ZXJd73w119z3vdbfe/wDnbf3FvD68Y7H4dtWE91mLbjWv3vra0jHoOE9rPRqbbY+9j97H5dl/
2b/Ap4mRsuEdNWjT0nqlzK314r3subU6twLfc297sfFdq7/DXsfWxEw+ldUzHXNxMV9xx3+nc1pb
LX+79HDnDe/9G/8Am1Yp+uGFjmuujDuGPjNwq8ffax1m3DvszrDe5tbGb7/W9Nnpt/Rp8X609Cxr
rX14OUWW5VGeGOyK59eh11v0/Q/o7/Wb+j2+p7P5xOGWQ6IOMFrYvT8/LYx+Njuta+00NILR+kax
176n73N9PbSx9n6RFr6P1V1ePYzDfszHNbjn2jeXgup/O9nrNb+i9XZ6v5iqYv1jtpp6uwgl/VmO
EsgNrse5/qWe7/gLr8f2/wCkWlX9dKqX1ZNWG77W5+E7M3Wj0nNwWmutuKxtfqUuvn3+o6z0lJ94
mNqWHDE7tejo/UsgNNOKXh7PVaZYAWF5oD/e9v8AhmekoUdI6llXXUY2G+y7GdtvYAAWOkt9N28t
/Suc12yr+cerLfrbi449LEw3GiqirHobkuruPsyT1C5+Q3021P3bvSo2s/Q/zyFh/WjDoysp9+Ld
fj259fU8drbgLW20ue+urIttZb61LvU/SO/nUjzEzeg8FDBEbIP2T1E1lzcR+zbS86N4yXeliOIn
/D2/o/8Az4mv6H1Omr1LsNzagyy3cdhbspIbkP8Aa7/Bb2q/ifXquk4bsjENhpNrswNeGtuPqOyc
AM3D2NwbbPz1XH1vx/2Nb023HfZY/EGNXdvbDbHer9pv2bf5u/1KfZ/wSjOWR6BcMbZ6Vf8AWHpe
GbsXplGRQwNzWXZFTbHVi4elVkU2C2u2pln2f/oKrn9D+tWbdf1HNwrbLHuJut9gaPTP2fY1rX+1
lLmeiiYn1zx8enGpdhvfXVRj4+Q02NHqMpZmVWhvt9nq/ba3s/c9BUb/AKyUW/aZof8ArPVmdVHu
GjWep+rcfzn6b+c+gmGZ7BcIAG2J+rXWze7HGETcxoc9gfUS0F3ot9T9L7Her+j2P96rW9A60ykX
PwLK6ibhufA1xxY/LaWF25rqGUXbv+LWxd9dsIZmZmY+Ed+YGbmXtx3sBZkDNduZVj0/aNzP0bLc
r18pln6b11B/14xDjZWN9kudXfTlMpL7Q57Lcl+Y8ZD3ua51uzH6j6Fn59vpppkey4Bzf+Z/1ifZ
6QwHvt27zU11e4N9vvfW2zez+cr+mszPwcnp2VZhZlJx8mqPUqdEjcBY2dpd+Y5dFlfXPp1vXOnd
Yrw7WuwrRbbWTR7w1jK2tF9WNVkv/m/+1V2Ts/wXprkXOkkjQEkgJvEuAL//0fKkkkkVJcb+eb9P
/rX0v7Ks9R/nmf0n+bH9K+ny76H/AAP/AH9UUk8IKUT5qYnz/BV0k8LS2hP8r8FIz5/OFTSRQ29f
9YT6/wCsKmkihua/6wm18vwVRJJTb1/1hMJg8/KFVSQS2TP8r8EMz5oSSCQzPzUUySafquCkkkkw
pf/ZOEJJTQQhAAAAAABVAAAAAQEAAAAPAEEAZABvAGIAZQAgAFAAaABvAHQAbwBzAGgAbwBwAAAA
EwBBAGQAbwBiAGUAIABQAGgAbwB0AG8AcwBoAG8AcAAgAEMAUwAzAAAAAQA4QklND6AAAAAAARxt
YW5pSVJGUgAAARA4QklNQW5EcwAAAPAAAAAQAAAAAQAAAAAAAG51bGwAAAADAAAAAEFGU3Rsb25n
AAAAAAAAAABGckluVmxMcwAAAAFPYmpjAAAAAQAAAAAAAG51bGwAAAADAAAAAEZySURsb25nJym+
kgAAAABGckRsbG9uZwAAA+gAAAAARnJHQWRvdWJAPgAAAAAAAAAAAABGU3RzVmxMcwAAAAFPYmpj
AAAAAQAAAAAAAG51bGwAAAAEAAAAAEZzSURsb25nAAAAAAAAAABBRnJtbG9uZwAAAAAAAAAARnNG
clZsTHMAAAABbG9uZycpvpIAAAAATENudGxvbmcAAAABAAA4QklNUm9sbAAAAAgAAAAAAAAAADhC
SU0PoQAAAAAAHG1mcmkAAAACAAAAEAAAAAEAAAAAAAAAAQAAAAA4QklNBAYAAAAAAAcABgAAAAEB
AP/hDPhFeGlmAABNTQAqAAAACAAHARIAAwAAAAEAAQAAARoABQAAAAEAAABiARsABQAAAAEAAABq
ASgAAwAAAAEAAgAAATEAAgAAABwAAAByATIAAgAAABQAAACOh2kABAAAAAEAAACkAAAA0AAAASwA
AAABAAABLAAAAAFBZG9iZSBQaG90b3Nob3AgQ1MzIFdpbmRvd3MAMjAxMjowMjowNSAxNToxMTo0
NgAAAAADoAEAAwAAAAH//wAAoAIABAAAAAEAAAXyoAMABAAAAAEAAAFJAAAAAAAAAAYBAwADAAAA
AQAGAAABGgAFAAAAAQAAAR4BGwAFAAAAAQAAASYBKAADAAAAAQACAAACAQAEAAAAAQAAAS4CAgAE
AAAAAQAAC8IAAAAAAAABLAAAAAEAAAEsAAAAAf/Y/+AAEEpGSUYAAQIAAEgASAAA/+0ADEFkb2Jl
X0NNAAL/7gAOQWRvYmUAZIAAAAAB/9sAhAAMCAgICQgMCQkMEQsKCxEVDwwMDxUYExMVExMYEQwM
DAwMDBEMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMAQ0LCw0ODRAODhAUDg4OFBQODg4OFBEM
DAwMDBERDAwMDAwMEQwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAjAKADASIAAhEB
AxEB/90ABAAK/8QBPwAAAQUBAQEBAQEAAAAAAAAAAwABAgQFBgcICQoLAQABBQEBAQEBAQAAAAAA
AAABAAIDBAUGBwgJCgsQAAEEAQMCBAIFBwYIBQMMMwEAAhEDBCESMQVBUWETInGBMgYUkaGxQiMk
FVLBYjM0coLRQwclklPw4fFjczUWorKDJkSTVGRFwqN0NhfSVeJl8rOEw9N14/NGJ5SkhbSVxNTk
9KW1xdXl9VZmdoaWprbG1ub2N0dXZ3eHl6e3x9fn9xEAAgIBAgQEAwQFBgcHBgU1AQACEQMhMRIE
QVFhcSITBTKBkRShsUIjwVLR8DMkYuFygpJDUxVjczTxJQYWorKDByY1wtJEk1SjF2RFVTZ0ZeLy
s4TD03Xj80aUpIW0lcTU5PSltcXV5fVWZnaGlqa2xtbm9ic3R1dnd4eXp7fH/9oADAMBAAIRAxEA
PwDy2qq261lNLHWW2ODK62Auc5zjtYxjG+5z3OXS9K6D06nIvwc6p3Uuqsots+xY7zspdUw2Cm22
gPflZljx6bqMd3p43+Ettv8A0OPW+q11+K7qWRisbZlMwttAcwP912Th4b2ta7862nIto9v+lXWY
1rBjZ2OMLExMKii1vrubbj1Zg9NteTez7PbXblUMzBvZ+ju9LDv/AEH2a1n6WUR1YckzqA4DOlfV
111dObiX4eRa4MZi42ZXkZDnuOxlYxfsjmUv9R23ZmZmNYh5fQvq4zNrxMS3qGR9p1w7KaarxcNz
qnenX62JZ7L6rqf+t+p/Nq307I+rX22urCwnuzntsZRbj3WVUeq9jq6GY/24ZWT69jnbMbKt9H0c
r0P0Cm99dOI/oXSW2Y5ysWvMqse8WXPN9VeTl9KZayuj0qLsdu3ZVX6mZk4vpXf0j0q3cKOI3uR5
/wApOH1nodPS8qqmnJGZXdS29trQ0AS6yp9X6K3Iqe6qyl7HvqusrVEUt45PgFsdRracPo7jqPsE
D5ZWaqjKpHgPAaKQQtXFpqWqKHHhseZT+g4eHyV0UhEFQ/1CcMSDNz/R8dPkujz/AKgdQ6fVdZk9
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
2l35jl0WV9c+nW9c6d1ivDta7CtFttZNHvDWMra0X1Y1WS/+b/7VXZOz/BemuRc6SSNASSAm8S4A
v//R8qSSSRUlxv55v0/+tfS/sqz1H+eZ/Sf5sf0r6fLvof8AA/8Af1RSTwgpRPmpifP8FXSTwtLa
E/yvwUjPn84VNJFDb1/1hPr/AKwqaSKG5r/rCbXy/BVEklNvX/WEwmDz8oVVJBLZM/yvwQzPmhJI
JDM/NRTJJp+q4KSSSTCl/9n/4Q+oaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA/eHBhY2tl
dCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEg
eG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDQuMS1jMDM2
IDQ2LjI3NjcyMCwgTW9uIEZlYiAxOSAyMDA3IDIyOjQwOjA4ICAgICAgICAiPiA8cmRmOlJERiB4
bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8
cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4YXA9Imh0dHA6Ly9ucy5hZG9iZS5j
b20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIg
eG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxu
czp4YXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0
dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnRpZmY9
Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRv
YmUuY29tL2V4aWYvMS4wLyIgeGFwOkNyZWF0ZURhdGU9IjIwMTItMDItMDVUMTU6MTE6NDYrMDE6
MDAiIHhhcDpNb2RpZnlEYXRlPSIyMDEyLTAyLTA1VDE1OjExOjQ2KzAxOjAwIiB4YXA6TWV0YWRh
dGFEYXRlPSIyMDEyLTAyLTA1VDE1OjExOjQ2KzAxOjAwIiB4YXA6Q3JlYXRvclRvb2w9IkFkb2Jl
IFBob3Rvc2hvcCBDUzMgV2luZG93cyIgZGM6Zm9ybWF0PSJpbWFnZS9qcGVnIiBwaG90b3Nob3A6
Q29sb3JNb2RlPSI0IiBwaG90b3Nob3A6SGlzdG9yeT0iIiB4YXBNTTpJbnN0YW5jZUlEPSJ1dWlk
OjA4RThFNzdBMDI1MEUxMTE4NEQyRDNBNzU0Qzg1N0Y0IiB4YXBNTTpEb2N1bWVudElEPSJ1dWlk
OjA3RThFNzdBMDI1MEUxMTE4NEQyRDNBNzU0Qzg1N0Y0IiB0aWZmOk9yaWVudGF0aW9uPSIxIiB0
aWZmOlhSZXNvbHV0aW9uPSIzMDAwMDAwLzEwMDAwIiB0aWZmOllSZXNvbHV0aW9uPSIzMDAwMDAw
LzEwMDAwIiB0aWZmOlJlc29sdXRpb25Vbml0PSIyIiB0aWZmOk5hdGl2ZURpZ2VzdD0iMjU2LDI1
NywyNTgsMjU5LDI2MiwyNzQsMjc3LDI4NCw1MzAsNTMxLDI4MiwyODMsMjk2LDMwMSwzMTgsMzE5
LDUyOSw1MzIsMzA2LDI3MCwyNzEsMjcyLDMwNSwzMTUsMzM0MzI7NjRDQUVBMkYwQUM2QTMxREYz
Nzc2NkI2MUI3Q0FFQTkiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIxNTIyIiBleGlmOlBpeGVsWURp
bWVuc2lvbj0iMzI5IiBleGlmOkNvbG9yU3BhY2U9Ii0xIiBleGlmOk5hdGl2ZURpZ2VzdD0iMzY4
NjQsNDA5NjAsNDA5NjEsMzcxMjEsMzcxMjIsNDA5NjIsNDA5NjMsMzc1MTAsNDA5NjQsMzY4Njcs
MzY4NjgsMzM0MzQsMzM0MzcsMzQ4NTAsMzQ4NTIsMzQ4NTUsMzQ4NTYsMzczNzcsMzczNzgsMzcz
NzksMzczODAsMzczODEsMzczODIsMzczODMsMzczODQsMzczODUsMzczODYsMzczOTYsNDE0ODMs
NDE0ODQsNDE0ODYsNDE0ODcsNDE0ODgsNDE0OTIsNDE0OTMsNDE0OTUsNDE3MjgsNDE3MjksNDE3
MzAsNDE5ODUsNDE5ODYsNDE5ODcsNDE5ODgsNDE5ODksNDE5OTAsNDE5OTEsNDE5OTIsNDE5OTMs
NDE5OTQsNDE5OTUsNDE5OTYsNDIwMTYsMCwyLDQsNSw2LDcsOCw5LDEwLDExLDEyLDEzLDE0LDE1
LDE2LDE3LDE4LDIwLDIyLDIzLDI0LDI1LDI2LDI3LDI4LDMwO0FGRTQ2REM2MzBDQjM2M0NCRjI0
OTkzMjJEMzkwQzE5Ij4gPHhhcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InV1aWQ6
MDRFOEU3N0EwMjUwRTExMTg0RDJEM0E3NTRDODU3RjQiIHN0UmVmOmRvY3VtZW50SUQ9InV1aWQ6
NzQ1NEUxNEIwMEM3REQxMUI0NUVCMzIxRjEwNjMyQkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwv
cmRmOlJERj4gPC94OnhtcG1ldGE+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgPD94cGFja2V0IGVuZD0idyI/Pv/bAEMAAgEBAgEBAgICAgICAgID
BQMDAwMDBgQEAwUHBgcHBwYHBwgJCwkICAoIBwcKDQoKCwwMDAwHCQ4PDQwOCwwMDP/AABQIAAkA
KARDEQBNEQBZEQBLEQD/xAAbAAADAAIDAAAAAAAAAAAAAAAGBwgBBAAFCf/EADgQAAEDAwMBBAYJ
BAMAAAAAAAIBAwQFBhEABxIIISI0chMxMjdhcRQXM0J0grGysxZBUXW0wdH/2gAOBEMATQBZAEsA
AD8A8ydrbYZDa224cSiUiCzIp7rj8mY5j6U6URp5HFAkVCRSEkTvCuFFUwi6mrpy26p8XYexqZTb
Ttmkw5lIkOzJ9RfUSnvHT48kX1aNCFxDMTRFU21UVBRRBXGinpG2ms6FtHaMCHbFuU6nyae46/Lk
milNcOIy8jytkiiXIkLC8hXHFUwi40VdI201nQdo7RgQ7Yt2nQJNPcdflyTRSmuHEZeR5WzRRLkS
FheQrjiqYRcaVgdFt27pyplwUB+zDpFTqUgYgnctNhucUlGzlWFdRWw5Cq+rigJyTuYXSMPoZrO6
1xVW4aA5Yr1EqtZmDDT+pqZDLikxxnP0f0qejBCFVTCcEBOQ5DC6am1PSLtjes2RU3Tt0oU6a/6E
RqMRniiPEHY0hJxTKKqYTjx7U7uF0wNuOnHaW4qzMmyioxRZM19W0bkx2xREdJO62KoiJlFxx7uP
V2YXTW222EiBtRQwrm2W2NxFDiA03Umtx4FPlSnXpDi83wFzkaojzIoK9oCwa57V40Js9svt7G2P
tuJdWyO093vUqALDdYj7mwqZNqD78p4lckg25lxUR+MAiXa2MY+9hVQaLofTL02lt7ACXS7UqLkV
rgL309hpx8jNVy4QuIpKnIU73qQPnqiKNs10vjYcGPNpFDqD0NpQR5HAaN8iMly4QGil7QomfUg/
PXaO9I9B+r+pUqRt9YFNq7dukMStJulAmGU30jTQyHBSQLYplSMgESzyTAoKLjlc6VNq/qarlAPZ
zbyj3OzaBs025freh1B06r6RlkJjwJIBkBypmQA2eeaYBBRcK/dvpb2JGy6pAg21Z7FSWlEESorc
7JkEjkAC+Y+l4JhVVVFBLOU7MIulbuvsr09nZNTgU+17eZqRUsmolQWtoZjJyIi+YK4gIidqqiCu
cp2Y0h9yOhS89rbJmXBVp9iJT4YKapEu2nzHzVMdwWmnSNS7fVj/ADqOt6egK7tpLFnXJV5m3aUq
EBGaRLyp02SePuAwy4ThH8MJnXn71X9E9Nsi2p9ZkOWKlJiCRmoXBEdklj7oNNmpEXwVE1APU/0q
0K2qLNqZlaKU2OhEapV45vl8BbAlJS+ComtTaj3a1P8ACyP4T1jpt9xFd/10z/iu6RPRv7nZ/wCC
k/wOaT3Rz7nqh+Ck/wADmlEvr1OU/wC2LyB+0dENpeETyD+1NE9leAHyD+1NZc9rW/J8YflX9NGj
XhfyaNWPA/l1xPaT5a0F9sfN/wBLoIub7F7zL+i6Cbq8O/8AP/3WB/v8tdTH8cvlXU17s+Nc8q6m
neDxTvyXX//Z";

$immmm = "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";
$okey = "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";
$notok = "/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdC IFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAA AADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlk ZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAA ABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAA AAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAA AABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEA AAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAA ACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAEBAQEBAQEBAQEBAQEB AQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEB AQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEB AQEBAQH/wAARCAPoAk4DASIAAhEBAxEB/8QAHwAAAAYDAQEBAAAAAAAAAAAABAUGBwgJAAMKAQsC /8QAgBAAAQEFBAQICAgHCQkIDgAXAQUCBAYHEQADITEIFUFREhQWJWFxgfAJEzWRobHB0RciJCY0 RVXhGDI2RFRl8QojJ0JGVnWFlTNSV2JkZnJ2kjc4WIKWpbXCGShDR3R3hqKys7TF0uIaSFNnc4Sj Y4OTlKbD5aTVKTloh7bG0//EAB4BAAEEAwEBAQAAAAAAAAAAAAQABQYHAQIICQMK/8QAYhEAAQIE BAMEBgUHCAQKCAILAQIRAwQFIQAGEjEHQVETImFxCBSBkaHwFTKxwdEWIyRCUmLhFzM0NXKSwvEJ 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";
// print($response);
// echo json_encode($response);
$imgDataa="lolllllllll";
$path="../productpic/$imgDataa.jpg";
file_put_contents($path,base64_decode($notok));
echo "done";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<img src='data:image/jpg;base64, $notok' />";
    ?>
</body>
</html>
