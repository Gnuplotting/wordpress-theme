#!/usr/bin/gnuplot
#
# Generate a transparent plot of the Bessel function of first kind and 0-3
# order. This is used in the header of the website.
#
# AUTHOR: Hagen Wierstorf
reset

# The new design has a width of 940px.
# wxt
set terminal wxt size 940,120 enhanced persist font 'Helvetica,10'
# png
set terminal pngcairo size 940,120 enhanced font 'Helvetica,10'
set output 'bessel_big.png'

set style line  1 lc rgb '#0060ad' lt 1 # --- blue
set style line  2 lc rgb '#dd181f' lt 1 # --- red
set style line  3 lc rgb '#ffea00' lt 1 # --- yellow
set style line  4 lc rgb '#d5ff00' lt 1 # --- green

set style fill transparent solid 0.5 noborder
set style function filledcurves y1=0

# xrange
# use 0:21 for 720px, 0:28 for 940px, 0:6.4 for 220px
set xrange [0:28]
set yrange [0:1]

set bmargin 0
set tmargin 1
set lmargin 0
set rmargin 0
unset border; unset tics; #unset key

# Bessel functions (after Bronstein 2001, eq. 9.54a)
besj2(x) = 2*1/x * besj1(x) - besj0(x)
besj3(x) = 2*2/x * besj2(x) - besj1(x)
besj0_(x) = x<5 ? besj0(x) : 1/0

plot besj0(x) fs solid 1.0 t 'J_0(x)' ls 1, \
     besj1(x)               t 'J_1(x)' ls 2, \
     besj2(x)               t 'J_2(x)' ls 3, \
     besj3(x)               t 'J_3(x)' ls 4
