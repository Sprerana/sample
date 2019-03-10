v <- c(7,12,9,11,10)
y<-c(2015,2016,2017,2018,2019)
# Give the chart file a name.
png(file = "line_chart.jpg")
# Plot the bar chart. 
plot(y,v,type = "o")

dev.off()