from sklearn.cluster import KMeans
import numpy as np
import pandas as pd
import sys, random

file=pd.read_csv('survey_cleaned.csv', index_col = False)
file=file.drop(['Unnamed: 0'],axis=1)
file=file.drop(['Country'],axis=1)
print(file.columns)
print("file read")
x=file.values
#three clusters High Medium Low
kmeans = KMeans(n_clusters=3, random_state=0).fit(x)

print("k-means")
print("="*30)
print(set(kmeans.labels_))
print(kmeans.cluster_centers_)
#pass the quiz input here as a list
def getLabel(ans):
    ans=np.array(ans)
    return kmeans.predict([ans])[0]
	
#example
c = random.randint(1,3)
if c == 1:
	print(getLabel([48,1,0,2,1,1,2,1,1,0,2,1,2,2,2,3,1,2,3,1,2]))
else: 
	print(getLabel([25,1,0,1,1,0,1,1,0,1,2,1,3,1,2,3,1,2,1,1,2]))
#print(getLabel(sys.argv[1]))