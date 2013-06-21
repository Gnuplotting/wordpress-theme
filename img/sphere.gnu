#!/usr/bin/gnuplot
#
# Plotting a sphere with Gnuplots parametric mode
#
# AUTHOR: Hagen Wierstorf
# VERSION: gnuplot 4.6 patchlevel 0

reset

# png
set terminal pngcairo size 350,262 enhanced font 'Verdana,10'
set output 'sphere.png'

# Style definitions
set border lw 1.5
set linetype 1   lc rgb '#0060ad' lt 1 lw 1     # --- blue
set linetype 2   lc rgb '#0060ad' lt 1 lw 1     # --- blue

unset key; unset tics; unset border
set lmargin screen 0
set rmargin screen 1
set tmargin screen 1
set bmargin screen 0
set size ratio -1
set view 53,16

set parametric
set isosamples 30
set hidden3d

# Radius
r = 1.0
h = sqrt(r/2)

set xrange [-1.2:1.2]
set yrange [-1.2:1.2]
set zrange [-1.2:1.2]
set urange [-0.4/2*pi:(pi-0.2)/2*pi]
set vrange [-pi/2:pi/2]

# Parametric functions for the sphere
fx(v,u) = r*cos(v)*cos(u)
fy(v,u) = r*cos(v)*sin(u)
fz(v)   = r*sin(v)

splot fx(v,u),fy(v,u),fz(v)
